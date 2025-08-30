<?php

namespace CleverIt\UBL\Invoice\Command\UBL;

class RoRule
{
    private string $path = "./stubs/rules_elements.json";

    private array $rules = [];

    public mixed $rule_set;

    public mixed $rule;

    public array $unmatched_rules = [];
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

        // echo print_r($matches);
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

    public function buildRules()
    {

        $d = [];
        $this->unmatched_rules = [];
        
        foreach($this->splitRules() as $rule) 
        {

            $exists = &$rule[0];
            

            if($exists && in_array($rule[0], ["count","string-length","matches"])) {

                $node = end($rule);

                $parts = explode(" ", $node);

                if(stripos("string-length", $rule[0]) !== false) {

                    if(count($parts) != 3) {
                        $length = str_replace(["<",">","="], "", ($parts[1] ?? ''));
                        $operator = preg_replace('/[0-9]+/', '', ($parts[1] ?? ''));

                    } else {
                        $operator = $parts[1] ?? '';
                        $length = $parts[2] ?? '';
                    }

                    $d[] = [
                        "rule" => $rule[0],
                        "field" => str_replace("))", "", $parts[0]),
                        "operator" => $operator,
                        "length" => $length,
                    ];
                } elseif(stripos("count", $parts[0]) !== false) {

                    $field = str_replace(")", "", $parts[0]);
                    
                    if(count($parts) != 3){
                        $length = str_replace(["<",">","="],"", ($parts[1] ?? ''));
                        $operator = preg_replace('/[0-9]+/', '', ($parts[1] ?? ''));
                    }
                    else 
                        $length = $parts[2] ?? '';

                    $d[] = [
                        "rule" => $rule[0],
                        "field" => $field,
                        "operator" => $operator,
                        "length" => $length,
                    ];
                } 
            }
            else{
                $this->unmatched_rules[] = $rule;
            }                
        }

        return $d;
    }

}