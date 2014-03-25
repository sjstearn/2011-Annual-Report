=== PlayPress ===
Contributors: JoshuaGoodwin
Tags: audio, media
Requires at least: 2.5
Tested up to: 3.4.2
Stable tag: trunk
License: MIT License

PlayPress is a JavaScript-free, low-Flash audio player, fortified with HTML5.

== Description ==

Some WordPress audio plugins inject JavaScript into every page of your website, even pages that don't have any audio on them. PlayPress doesn't need any JavaScript.

Other plugins rely on Adobe's displeasing Flash technology. PlayPress can fall back or default to HTML5 audio – without any JavaScript voodoo wizardry.

Other plugins can play videos and make you tea. PlayPress has a laser focus on just one thing: it lets you put an audio player in blog posts and pages.

You use a standard WordPress shortcode like this:

	[audio mp3="http://example.com/bells.mp3" ogg="http://example.com/bells.ogg"]

Users of most modern browsers will see a native HTML5 audio player. In older browsers, an adequate Flash-based one will be shown.

You don't even need an Ogg Vorbis file:

	[audio mp3="http://example.com/bells.mp3"]

In this case, PlayPress will first attempt to show the Flash player. If Flash isn't installed, readers will see the HTML5 audio player – but it won't work in Firefox or Opera. (Most Firefox and Opera users should have Flash installed.)

In either case, if neither Flash nor HTML5 are supported by the browser, users will see a link to download the audio file. Graceful degradation.

Optionally, specify a title and/or artist for display in the Flash player (this will override the ID3 metadata embedded in your MP3 file, which is otherwise used if present):

	[audio mp3="http://example.com/bells.mp3" title="Imagine" artist="John Lennon"]

[The author's website](http://joshuagoodwin.com/playpress) has PlayPress running live right there on it.

== Installation ==

You should really use the plugin browser and installer built into your WordPress admin panel. But you *can* do it the old way:

1. Upload the `/playpress/` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

For optimal results, place a copy of `htaccess.txt` wherever you will be hosting audio files, and rename this `.htaccess`.

Now enjoy using the shortcode syntax in your posts and pages:

	[audio mp3="http://example.com/bells.mp3" ogg="http://example.com/bells.ogg" title="Winnie the Pooh" artist="AA Milne"]  

	[audio mp3="http://example.com/bells.mp3"]

== Screenshots ==

1. An example of a browser's inbuilt native HTML5 audio player (Google Chrome on Windows 7)
2. The Flash audio player (taken from  Martin Laine's legendary [WordPress Audio Player](http://wpaudioplayer.com/) plugin)

== Changelog ==

= 1.2.1 =
* If either `artist=""` or `title=""`, no text is shown on the Flash player.

= 1.2 =
* Added optional `artist` and `title` shortcode attributes.

= 1.1.1 =
* Fixed misleading typo in code comments.

= 1.1 =
* Rearranged the code to make lots more sense. 
* Made it easier for more confident users to customise the Flash player.

= 1.0 =
* Is the loneliest number. The very first version of PlayPress.
