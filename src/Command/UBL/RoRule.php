<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

class RoRule
{
    private string $path = "./stubs/rules_elements.json";

    private array $rules = [];

    public mixed $rule_set;

    public mixed $rule;

    public function __construct(public string $parent, public string $key)
    {
        $this->rules = json_decode(file_get_contents($this->path));
    }

    public function getRule()
    {
        $this->harvestParent()
             ->extractRule()
             ->sanitizeRule();
    }

    public function harvestParent(): self
    {
        foreach($this->rules as $rule)
        {
             $names = explode("|", $rule->name);

             foreach($names as $name) 
             {
                $name = trim($name);

                if($name == $this->parent){
                    $this->rule_set = $rule;
                    return $this;
                }

             }
        }

        return $this;
    }

    public function extractRule(): self
    {
        foreach($this->rule_set->rules as $rule)
        {
            if($var = $this->parseRule($this->key, $rule)){
                
                $this->rule = $var;
                return $this;
            }

        }

        return $this;
    }

    private function parseRule(string $key, mixed $rule)
    {
        // Regular expression pattern for matching multiple pairs of parentheses
        $pattern = '/\(([^()]+)\)/';

        // Match all occurrences of content within parentheses
        preg_match_all($pattern, $rule->rule, $matches);

        // Extracted data array
        $data = array();

        echo print_r($matches);
        // Iterate over matched content
        foreach ($matches[1] as $match) {
            // Add the content to the data array
            $data[] = $match;
        }

        foreach($data as $searchable)
        {
            if(stripos($searchable, $key) !== false)
                return $rule;
        }

    }

    private function sanitizeRule()
    {
        if (!$this->rule)
                return [];

        
    }

    public function splitRules()
    {
        $data = [];

        foreach ($this->rules as $ruleset){
            foreach($ruleset->rules as $rule){

                $data[] = explode("(", $rule->rule);

            }
        }
        
        return $data;

    }
}