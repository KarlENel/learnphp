<?php
// code author

class Job{
    public function task(ConsoleLogger $logger){
        for($i=0;$i<10;$i++){
            $logger->log("Task $i complete!");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}

// code user
class FileLogger {
    public function log($message){
        $file = fopen('./file.txt', 'a');
        fwrite($file, $message. "\n");
        fclose($file);
    }
}

class NothingLogger implements Logger {
    public function log($message){
        
    }
}

$job = new Job();
$logger = new ConsoleLogger();
$job->task($logger);