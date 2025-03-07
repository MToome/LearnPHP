<?php

// Programmer 1 code, ei saa muuta seda koodi
class Job {
    public function task(){
        for($i=0; $i<10; $i++){
            // some task
            $logger = new ConsoleLogger();
            $logger->log("Task Done: #$i");
        }
    }
}

class ConsoleLogger {
    public function log($text){
        echo "$text\n";
    }
}

// Programmer 2 code

$job = new Job();
$job->task();
