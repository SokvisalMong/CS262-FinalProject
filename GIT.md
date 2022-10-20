# Setup

## Literally step 1

First navigate into the project directory, then run

`git init`

This initializes a local repo.

***LITERALLY THE MOST ESSENTIAL STEP IN THIS***

## Who are you?

Now, set up who the fuck you are.

Set your name

`git config --global user.name USERNAME`

Set your email

`git config --global user.email USER@EMAIL.COM`

Without setting your name, we won't know who the blame for making such a shitty commit.

Without email, you wouldn't be able to push to the online github anyway.

## Now we can link your current local repo to the online one

To link the local and online repo, run

`git remote add origin https://github.com/SokvisalMong/CS262-FinalProject.git`

## Pulling from remote

Now that we linked them, we can yoink the current online repo into ours.

`git pull origin`

Now we pulled everything into our local, but we need to switch branches first.

If you run `git branch` you can see all of your branches, but there should be none.

Because currently they are all remote. To see them, run `git branch -r`

***`-r` LITERALLY STANDS FOR REMOTE***

Now you can switch to one of the branches using `git checkout`

`git checkout master`

Now that branch is available locally.

If you want to make all remote branches local, you need a script.

Look it up cus I ain't providing it.

## Staying up to date

Each time you are about to work on the project, make sure you have the latest build of master.

First, check into your branch

`git checkout BRANCH`

Second, fetch the latest repo

`git fetch origin`

Lastly, merge your current branch with the latest repo

`git merge origin/master`

# Frequently used commands

## Commiting

Remember, commits are basically checkpoints.

Commit often at minor milestones.

Just made a function? commit that shit.

Changed some CSS? commit.

You get the point.

The reason being, you can roll back to a previous commit at any time.

*OMG, IT'S LIKE A CHECKPOINT. NO FUCKING WAY*

Oh right, forgot. But to commit you need to track the files first.

Tracking and whatnot is a bit much to explain, google is your friend but.

Add all the files in that directory to be tracked.

`git add .`

Add single file to be tracked

`git add FILENAME`

Add multiple files to be tracked

`git add FILENAME1 FILENAME2 ...`

Now that you tracked them, you need to make a commit

`git commit -m "MESSAGE"`

Make sure the message is descriptive enough at first glance.

For example: "Fixed a minor bug with Login page routing"

And not some non-descriptive shit like "Commit #49" or "Fixed bug"

## Reverting

*Oh no, I did a poopy stinky. What shall I do?*

You can revert back to a previous commit using

`git revert HEAD --no-edit`

*Let's break it down*

`git revert HEAD` reverts back to the very previous commit, `--no-edit` stops the commit message editor

*Oh no, I fucked up longer than I thought.*!SECTION

You can back more than 1 commit ago by running

`git revert HEAD~NUMBER --no-edit`

NUMBER being how many commits back you want to go -1.

For example, you wanna go back 5 commits ago?

`git revert HEAD~4 --no-edit`

***I HAVE NOT FACT CHECKED THIS MYSELF, SUBJECT TO INCOMPETENCY***

## Pushing

After commiting, it won't go to the online repo immediately.

It'll still be in your local repo.

To push it to Github, run

`git push origin`

This will push your current to the branch you are currently working on.

***I SHOULD'VE INCLUDED THIS AT THE TOP BUT***

***NEVER WORK ON MASTER***

Now that you pushed onto the online repo. 

You might consider merging with the current master branch into production.

Open Github, and make a Pull Request.

Then, it'll be reviewed and checked over for any problems, such as conflicts.

If all good, it'll be merged into master.