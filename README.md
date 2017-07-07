# Client Dashboard Widgets plugin for Craft CMS

A set of CraftCMS dashboard widgets that are useful for a client user.

## Client Dashboard Widgets Overview

What does the plugin include?

### CMS Guide Widget

![CMS Guide Widget](resources/screenshots/cmsguide-widget.png)

### Structure List Widget

![Structure List Widget](resources/screenshots/structure-widget.png)

### Channel List Widget

![Channel List Widget](resources/screenshots/channel-widget.png)

### Single Entries List Widget

![Single Entries List Widget](resources/screenshots/singles-widget.png)

## Installation

To install Client Dashboard Widgets, follow these steps:

1. Download & unzip the file and place the `clientdashboardwidgets` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/joepagan/clientdashboardwidgets.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require joepagan/clientdashboardwidgets`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `clientdashboardwidgets` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Client Dashboard Widgets works on Craft 2.4.x and Craft 2.5.x.

## Changelog

*06/07/2017*

    Plugin folder now at root level
    Removing twitter widget, who cares right?
    Removing tools widget, just go to tools
    Removing contact results widget, who uses that contact form anymore?
    Added new widget for CMS guide
    - adding brief descriptions of how craft works (singles, channels, structures)
    - adding commented out global examples (that could be used across all projects)
    - added commented out structure example
    - added new entry type gif

####mov -> gif conversion

For my own convenience, a little script I use for gifs which I will forget about.

    time ffmpeg -i  example.mov -r 10 -f image2pipe -vcodec ppm - |  time convert -verbose +dither -layers Optimize \> - gif:- | gifsicle --colors 128 --delay=5 --loop --optimize=3 --multifile ->  example.gif

Brought to you by [Joe Pagan](https://www.joe-pagan.com)
