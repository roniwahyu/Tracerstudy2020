$(window).on("load", function() {
    map = new GMaps({
        div: "#geolocation",
        lat: -12.043333,
        lng: -77.028333,
        styles: [{
            featureType: "landscape",
            stylers: [{
                saturation: -100
            }, {
                lightness: 65
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "poi",
            stylers: [{
                saturation: -100
            }, {
                lightness: 51
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.highway",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.arterial",
            stylers: [{
                saturation: -100
            }, {
                lightness: 30
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "road.local",
            stylers: [{
                saturation: -100
            }, {
                lightness: 40
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "transit",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "administrative.province",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "water",
            elementType: "labels",
            stylers: [{
                visibility: "on"
            }, {
                lightness: -25
            }, {
                saturation: -100
            }]
        }, {
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                hue: "#ffff00"
            }, {
                lightness: -25
            }, {
                saturation: -97
            }]
        }]
    }), GMaps.geolocate({
        success: function(e) {
            map.setCenter(e.coords.latitude, e.coords.longitude)
        },
        error: function(e) {
            alert("Geolocation failed: " + e.message)
        },
        not_supported: function() {
            alert("Your browser does not support geolocation")
        },
        always: function() {
            alert("Done!")
        }
    }), map = new GMaps({
        div: "#geocoding",
        lat: -12.043333,
        lng: -77.028333
    }), $("#geocoding_form").on("submit", function(e) {
        e.preventDefault(), GMaps.geocode({
            address: $("#address").val().trim(),
            callback: function(e, t) {
                if ("OK" == t) {
                    var i = e[0].geometry.location;
                    map.setCenter(i.lat(), i.lng()), map.addMarker({
                        lat: i.lat(),
                        lng: i.lng()
                    })
                }
            }
        })
    })
});