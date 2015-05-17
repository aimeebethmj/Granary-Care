# For everyone

## How to add a new event

[Official documentation](http://eventespresso.com/wiki/add-new-event/#30_)

### Registration dates vs Event dates

Every event has a registration dates (from when till when can people *book* the event) and event dates (when does the event start and end)

### Open vs Closed events

* **Open**: people *can book* the event
* **Closed**: people *can't book* it

Need to make sure that the **registration dates** are not *past*, otherwise events will be *closed*.

### Categories

Important to categorise events so that they can be filtered by parents (eg *breakfast clubs* and *afterschool clubs*).

## How to manage repeating event

1. If you're making changes to all events in a series, better to edit the first event in the series

1. Set **Registration Start** to sometimes way in the past (eg: 01.01.2014, two years ago or so) and **Registration End** to the same day as the **Event Start Date**..

	You can choose if: 
	
	* each event's registration start and end dates will be incremented according to a formula [RECOMMENDED]
	* all created events are available for registration between the above registration dates








# For Aimee & Matteo 

* [Official EE documentation](https://eventespresso.com/support/documentation/versioned-docs/?doc_ver=ee3)






## [Customising templates](https://eventespresso.com/wiki/template-settings/#developeronly)

EE templates are not in the usual place `wp-content/themes/blabla`, instead the are in **`wp-content/uploads/espresso/templates`**

To display venue info:

```php
	<?php 
		$venueId = get_field('venue_id');
		$shortcode = '[ESPRESSO_VENUE id="'. $venueId . '"]';
		echo do_shortcode($shortcode);
	?>
```	

To display events at a certain venue:

```php
	<?php 
		$venueId = get_field('venue_id');
		$shortcode = '[ESPRESSO_VENUE_EVENTS id="'. $venueId . '" show_expired=false order_by=date(start_date)]';
		echo do_shortcode($shortcode); 
	?>
```			

## Paypal set up

### Sandbox testing

https://developer.paypal.com/developer/accounts
payments-facilitator@granarycare.com / letmeinpal
payments-buyer@granarycare.com / letmeinpal


# Bugs

### AJAX setup

In `event-espresso/scripts/espresso_cart_functions.js`

```js
jQuery.ajaxSetup({
    cache: false,
    // MM removed as jQuery.browser has been deprecated since 1.9
    // http://jquery.com/upgrade-guide/1.9/#jquery-browser-removed
    /*xhr: function()
    {
        if (jQuery.browser.msie)
        {
            return new ActiveXObject("Microsoft.XMLHTTP");
        }
        else
        {
            return new XMLHttpRequest();
        }
    },*/
    type: "POST",
    url:  EEGlobals.ajaxurl
});
```

# TODO

- [x] Paypal [sandbox](#sandbox-testing) set up
- [x] Display all future events by venue
- [x] Display single event
- [x] Book single event
- [ ] [Book multiple events](http://eventespresso.com/wiki/multiple-event-registration-add-on/)
- [ ] Subscribe to repeating event?
- [ ] Events calendar
- [ ] Improve copy on all those ugly pages (rename things etc)
- [ ] Style all those ugly pages 
- [ ] Paypal set up
- [ ] WP User integration 



