# TYPO3 extension "newspreview"

This extensions changes the checkbox for "show in preview" into a select box with the following options: 

* Show only in full news
* Show in preview + full
* Show only in preview

**Important**: This behaviour is only implemented for the FAL relation.

## Show only in full news

	Field set to 0
	
The element is the same as *checkbox not checked*. 

## Show in preview and full

	Field set to 1
	
The element is the same as *checkbox checked*. 

## Show only in preview

	Field set to 2
	
The element is only shown by calling ```{newsItem.falPreviewOnly}```.

# Additional information

## License

MIT

## Author

This extension is brought to you by Georg Ringer.