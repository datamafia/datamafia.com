#!/bin/sh

# v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v v
# Using https://github.com/datamafia/datamafia.com
# copy out of this dir to ~/
# ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^

# SET UP: Using not secure plain text storage, this seems to work for us:
# first :
# cd ~/github; # or where ever
# git init
# then -------v
# git config --global credential.helper "store"
# and after one run (w/PW ask) creds are stored
# only use an isolated account (deploy bot) and not your main identity
# Next: Make directories to match variables to match GITHUB, PRODUCTION, BACKUP
# Edit REPOHTTP to match the URL (w/.git ending)
# Edit REPONAME to match Repo name

# If this file has changed run:
#  mv ~/{PRODUCTION}/deploy.sh ~/deploy.sh

# best to configure to run from ~/

# Use arg undo to reverse the clone/copy
# bash {this_script}.sh undo

# start off right!
clear

# # # # # # # # # # # # # # # #
# Assign Deployment Variables #
# # # # # # # # # # # # # # # #

# Reminder: cp dir/. new/  will copy contents only of dir to new
# but will omit dirs and such w/out -r arg

# Local/server location of git directory relative to ~, trailing slash required
GITHUB="github/"

# location of production code relative to ~, trailing slash required
PRODUCTION="datamafia.com/"

# location of backup folder relative to ~, trailing slash required
BACKUP="backup/"

# remote git repository in https format
REPOHTTP="https://github.com/datamafia/datamafia.com.git"

# the name of the repo to make life easy
# via https://github.com/username/THISVALUE.git use THISVALUE
REPONAME="datamafia.com"

# first time only use
# git clone -b master https://github.com/datamafia/datamafia.com.git github/datamafia.com

printf 'Starting...'
printf 'Operating from:'
pwd
printf '\n\n'

# # # # # # #
# if no arg #
# # # # # # #
if [ -z "$1" ];then

    # remove existing repo from git directory.
    # We are using bare repo and clone for this script.
    rm -frv "$GITHUB$REPONAME"
    printf 'removed old repo data from git\n------------\n\n\n'

    printf 'add repo back so we can clone into it'
    mkdir "$GITHUB$REPONAME"
    printf 'add repo back so we can clone into it\n------------\n\n\n'

    printf 'about to clone'
    # clone the repo, including brnach arg for future compatibility
    git clone -b master $REPOHTTP "$GITHUB$REPONAME"

# # # # # #
# # # # # #
# # # # # #
# # # # # #

    printf '\n\nclone COMPLETE\n------------\n\n\n'

    printf 'prepare new code by removing artifacts'
    # prepare new code by removing artifacts
    rm -frv $GITHUB$REPONAME/.git
    printf 'prepare new code by removing artifacts COMPLETE\n------------\n\n\n'

    printf 'clear out old backup'
    # clear out old backup
    rm -frv $BACKUP*
    printf 'clear out old backup COMPLETE\n------------\n\n\n'

    printf 'backup current production'
    # backup current production
    cp -frv "$PRODUCTION." $BACKUP
    printf 'backup current production COMPLETE\n------------\n\n\n'

    printf '\n\nclear out current production\n\n'
    # clear out current production
    rm -frv $PRODUCTION*
    printf 'clear out current production COMPLETE\n------------\n\n\n'

    printf 'copy git to production'
    # copy git to production
    cp -frv "$GITHUB$REPONAME/." $PRODUCTION
else
    # # # # # # # # # #
    # THERE IS AN ARG #
    # # # # # # # # # #
    if [ $1 = "undo" ];then
        printf "\n- - - - - -\nUNDO CALLED, only works 1x\n\n"

        printf "clearing out production"
        rm -frv "$PRODUCTION"

        printf "copying previous to production"
        cp -frv "$BACKUP." $PRODUCTION
    else
        printf 'No arg matched, NOTHING happened'
    fi
fi
printf 'COMPLETE\n\n\n'

