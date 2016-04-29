(function ($, w) {
	"use strict";
	$(function () {
		// Place your administration-specific JavaScript here
        function loadCategories(e, id) {
            if (e.value !== '') {
                var url = e.value;
                var fullURL = url + '/categories';
                $.get(fullURL, function (data) {
                    data['categories'].forEach(function (i) {
                        appendItem(id, i.slug, i.name);
                    });
                })
            }
            console.log(e);
            console.log(id);
        } 
        function appendItem(id, key, value) {
            $('#' + id)
            .append($("<option></option>")
                    .attr("value",key)
                    .text(value)); 
        } 
        w.loadCategories = loadCategories;
	});
}(jQuery, window));
