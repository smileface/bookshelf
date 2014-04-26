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
    run("Permissions", "chmod -R 777 app/cache app/logs");
    run("Clear cache", "rm -rf app/cache/*");
    run("Drop DB", "php app/console doctrine:database:drop --force");
    run("Create DB", "php app/console doctrine:database:create");
    run("Schema update", "php app/console doctrine:schema:update --force");
    run("Load fixtures", "php app/console doctrine:fixtures:load --append");
