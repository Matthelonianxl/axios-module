(function () {
    var revDiv = document.querySelector('script[id="rc_948"]').parentNode;

    var callRev_rc_948 = function(response) {
        try {
            if(Array.isArray(response)) {
                response = revMap(response);
            } else {
                response = '';
            }
            var rcxhr = new XMLHttpRequest();
            rcxhr.onreadystatechange = function() {
                if (rcxhr.readyState == 4) {
                    var rcel = document.createElement("script");
                    rcel.type = 'text/javascript';
                    rcel.text = rcxhr.responseText;
                    rcel.async = true;
                    revDiv.appendChild(rcel);
                }
            }
            rcxhr.open("POST", "//trends.revcontent.com/serve.js.php?w=42212&t=rc_948&c=1549586351244&width=1360&referer=https%3A%2F%2Fwww.space.com%2Ftopics%2Fnasa-juno-jupiter-mission-news&is_blocked=true", true);
            rcxhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            rcxhr.withCredentials = true;
            rcxhr.send('criteo=' + response);
        } catch(e) {
            var rcel = document.createElement("script");
            rcel.id = 'rc_' + Math.floor(Math.random() * 1000);
            rcel.type = 'text/javascript';
            rcel.src = "//trends.revcontent.com/serve.js.php?criteo=&w=42212&t=rc_948&c=1549586351244&width=1360&referer=https%3A%2F%2Fwww.space.com%2Ftopics%2Fnasa-juno-jupiter-mission-news&is_blocked=true";
            rcel.async = true;
            revDiv.appendChild(rcel);
        }
    };

            (function () {
            
                                                                                        var pxl = function(data) {
                    var p = document.createElement('img');
                    p.src = data.src;
                    p.style.display = 'none';
                    revDiv.appendChild(p);

                    if (data.retry) {
                        data.retry--;
                        p.onload = function() {
                            setTimeout(function() {
                                pxl(data);
                            }, 50);
                        };
                    }
                };
                        pxl({
                retry: false,
                src: "https://bttrack.com/pixel/cookiesync?source=0b0edea9-c9fe-4b9c-9bcd-a51022f2873f&publisherid=ZDMyNjQwNmI0MGQ4OWNlYmNkN2E4ZGI2MTQ5NTE2NTk=&pushdata=109&secure=1"
            });
                                            pxl({
                retry: false,
                src: "https://g.cwkuki.com/cs/D8f2l?u=ZDMyNjQwNmI0MGQ4OWNlYmNkN2E4ZGI2MTQ5NTE2NTk="
            });
                                            pxl({
                retry: false,
                src: "https://ib.adnxs.com/getuid?https%3A%2F%2Fcm.revcontent.com%2Fpixel_sync%3Fbidder%3D115%26bidder_uid%3D%24UID%26exchange_uid%3DZDMyNjQwNmI0MGQ4OWNlYmNkN2E4ZGI2MTQ5NTE2NTk=&geo=35"
            });
                                            pxl({
                retry: false,
                src: "https://x.bidswitch.net/sync?ssp=revcontent"
            });
                                            pxl({
                retry: false,
                src: "https://rtb.rtxplatform.com/u/?u=RB3QFQTRZWU7&r=https%3A%2F%2Fcm.revcontent.com%2Fpixel_sync%3Fexchange_uid%3DZDMyNjQwNmI0MGQ4OWNlYmNkN2E4ZGI2MTQ5NTE2NTk=%26bidder%3D149%26bidder_uid%3D{USER_ID}"
            });
            
    }());    
            var cs = document.createElement("script");
cs.type = 'text/javascript';
cs.src = "https://static.criteo.net/js/ld/publishertag.js";
cs.async = true;
revDiv.appendChild(cs);

if(typeof rc_criteo == 'undefined') {
    var rc_criteo = [];
}

cs.addEventListener('load', function() {
    callCriteo_rc_948();
});

function callCriteo_rc_948() {
    var adUnits = {
        "placements": [
            {
                             'slotid': 'rev-0',
                             'zoneid': 1210272,
                             'nativeCallback': function(){}
                         },        ]
    };

    Criteo.events.push(function() {
        Criteo.RequestBids(adUnits, callRev_rc_948, 500);
    });
}

function revMap(response) {
    var final = [];
    var c = 0;
    var dupe;

    response.sort(function(a,b){ return b.cpm - a.cpm });

    response.forEach(function(r, index) {
        dupe = false;

        if(rc_criteo.indexOf(r.id) != -1) {
            return;
        }

        final.forEach(function(f, i) {
            if(r.nativePayload.products[0].title == f.headline) {
                dupe = true;
            }
        });

        if (!dupe && final.length < 1) {

            rc_criteo.push(r.id);

            var headline = r.nativePayload.products[0].title;

            final[c] = {};
            final[c].headline         = headline.length > 80 ? headline.substring(0,80) + '...' : headline;
            final[c].price            = r.nativePayload.products[0].price;
            final[c].target_url       = r.nativePayload.products[0].click_url;
            final[c].image_url        = r.nativePayload.products[0].image.url;
            final[c].cpm              = r.cpm;
            final[c].pixels           = [];
            final[c].advertiser       = r.nativePayload.advertiser.description;
            final[c].optout_click_url = r.nativePayload.privacy.optout_click_url;
            final[c].optout_image_url = r.nativePayload.privacy.optout_image_url;

            r.nativePayload.impression_pixels.forEach(function(p, i) {
                final[c].pixels.push(p.url);
            });

            c++;
        }

    });
    return encodeURIComponent(JSON.stringify(final));
}    })();