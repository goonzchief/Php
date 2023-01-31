<?php

// URL for the WordPress website's RSS feed
$url = "https://example.com/feed/";

// Fetch the contents of the URL
$rss = @file_get_contents($url);

// Check if the contents were successfully fetched
if ($rss === false) {
    die("Error: Unable to fetch contents of the URL");
}

// Parse the XML data
$xml = @simplexml_load_string($rss);

// Check if the XML data was successfully parsed
if ($xml === false) {
    die("Error: Unable to parse the XML data");
}

// Find the first <item> element
$item = $xml->channel->item[0];

// Display the title, link, and description of the latest article
echo "Title: " . $item->title . "<br>";
echo "Link: " . $item->link . "<br>";
echo "Description: " . $item->description . "<br>";

?>
