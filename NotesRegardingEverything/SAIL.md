# Useful commands to know when working with sail

Sail is a CLI used to interact with Laravel's Docker development environment.

# Using Sail

## Setting Alias

The normal way to use sail is to run

`./vendor/bin/sail COMMAND`

from the project directory

To shorten it, we can use Alias

`alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`

This way, we don't have to type the `./vendor/bin` everytime>

We can now just type

`sail COMMAND`

***ALIAS IS RESET EVERYTIME YOU CLOSE THE SHELL***

***EITHER SET IT UP PROPERLY, OR MAKE A BASH FILE TO DO IT FOR YOU***!SECTION

***I CAN NOT BE FUCKED SO GOODLUCK***

## Starting Sail

The command to start the docker application through sail is

`sail up`

This will bring everything up. SQL, Artisan, Etc.

Useful for reading the logs but not so useful when you still need to interact with the terminal.

To counter this, you have 2 options:

- Run it detached
- or Use Screen

## Detached

To run the container in detached mode, run sail with the `-d` tag

`sail up -d`

***`-d` literally means detached***

This will run the container in the background and free up the current terminal.

## Screen (My prefered method, therefore the correct one)

Running the container in a seperate screen can let use switch between checking the logs and using a terminal.

First of all, you need to install Screen.

`sudo apt-get install screen`

***YOU MIGHT ALSO NEED TO DO THIS***

`sudo chmod -R 777 /var/run/screen`

***KEYWORD: MIGHT***

Then, start a screen session by running

`screen -S SCREENNAME`

It should immediately put you into the screen.

Now you can use `sail up` normally and read the logs.

To exit, or generally called *Detach* from the screen.

Use the keyboard shortcut `Ctrl + A + D`

To reattach the screen, run

`screen -r SCREENNAME`

If you don't remember the screen name or didn't assign one, run

`screen -ls`

To list all screens currently running and it should output something like this.

```
There are screens on:
        762.pts-2.VizzyPC       (10/15/22 03:25:36)     (Detached)
        490.sail                (10/15/22 03:25:11)     (Detached)
2 Sockets in /run/screen/S-root.
```

We can deconstruct the output into 2 main parts (by my standard atleast)

```
490.sail
```

`490` is the screen ID.

`sail` is the screen Name.

You can also reattach to a screen using the ID instead.

Example:

`screen -r 490`

There are 2 ways to stop, or kill, a screen

- From within the screen, or Attached
- From outside the screen, or Detached

## Attached Method

Use the keyboard shortcut `Ctrl + D` from within the screen.

## Detached Method

Run

`screen -X -S SCREENNAME/SCREENID kill`

While being detached from the screen.

***DON'T RUN SCREEN IN SUDO***