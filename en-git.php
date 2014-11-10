<?php

// Init vars
$LOCAL_ROOT         = "/var/www/html/Enernoc-Test";
$LOCAL_REPO_NAME    = "test";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:UttamM/test.git";
$DESIRED_BRANCH     = "master";

// Delete local repo if it exists
if (file_exists($LOCAL_REPO)) {
    shell_exec("rm -rf {$LOCAL_REPO}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo shell_exec("cd {$LOCAL_ROOT} && git pull");

die("done " . mktime());