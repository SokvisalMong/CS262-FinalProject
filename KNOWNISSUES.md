## Port 3306 is in-use

Cause: MySQL starts on boot

This happens to my team members who use windows.

Solution: Open Task Manager > Services > MySQL > Stop Task

Not the most elegant but ehh.

## Permission Issues

Cause: Not entirely sure, but most likely what the current user is compared to what was used to install Laravel

If you are having permission issues, make sure that the user you installed the laravel sail app with

and the current user is the same one.

For example:

```
dev@VizzyPC:~/
```

was used to install Laravel.

Then make sure the stick with that.

Especially becareful with screen.

Solution: Match the original user and the current one.
If you used root initially, stick with root.