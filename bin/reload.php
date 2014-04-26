<?php
    function run($text, $command, $canFail = false)
    {
        echo "\n* $text\n$command\n";
        passthru($command, $return);
        if (0 !== $return && !$canFail) {
            echo "\n/!\\ The command returned $return\n";
            exit(1);
        }
    }

    //Steps
    run("Clear cache", "rm -rf app/cache/*");
