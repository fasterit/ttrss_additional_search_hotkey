# Additional search hotkey for Tiny Tiny RSS (tt-rrs, ttrss)

The default hotkey for search in Tiny Tiny RSS is / (slash) which is bound to search in the current web page text by Firefox and other sane browsers originally.
The only way to change (or amend) the hotkeys Tiny Tiny RSS uses is by adding a plugin. Duh.

This plugin adds

	h as a hotkey for Tiny Tiny RSS search dialog
	H as a hotkey for the help pop-up

## Credits

This basically copies the [swap jk plugin](https://git.tt-rss.org/fox/tt-rss/src/master/plugins/swap_jk) and makes it into a search (and help) dialog plugin.
Trivial work.

## License

As per the original Tiny Tiny RSS license this plugin is licensed under [GPLv3](https://git.tt-rss.org/fox/tt-rss/src/master/COPYING)
or any [later version](https://git.tt-rss.org/fox/tt-rss/src/master/README.md).


## Source

Hosted at https://git.faster-it.com/ttrss_additional_search_hotkey    
Mirrored at https://github.com/fasterit/ttrss_additional_search_hotkey    

## Installation

Clone this repository and **copy** or **symlink** the `additional_search_hotkey` subdirectory into the `plugins.local` subdirectory of your Tiny Tiny RSS installation.
Go to settings and enable the plugin and allow Tiny Tiny RSS to reload (it asks for this).

Now pressing the h key should show the search dialog and pressing H (Shift+h) the help dialog.

## Support

Commercial support for RSS / ATOM and software using these common standards is available from Faster IT GmbH.
