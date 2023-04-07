;(function ($) {
	document.addEventListener('DOMContentLoaded', function() {
		$(document).on('click', '.contact-profile-appointment .add-appointment', function(el) {
			var urlPath = $(el.target).attr('href');
			if (typeof urlPath !== 'undefined') {
				var url = new URL(urlPath, document.baseURI)
				var hash = url.hash;
				var urlArgs = new URLSearchParams(hash.substring(1));
				var hashValue = new Array();
				if (urlArgs) {
					var parentHash = location.hash.substring(1);
					var parentUrlArgs = new URLSearchParams(parentHash);
					urlArgs.forEach((value, key) => {
						if(!parentHash) {
							hashValue.push(key + '=' + value);
						} else {
							if (parentUrlArgs && parentUrlArgs[key]) {
								parentUrlArgs[key] = value;
							} else {
								parentUrlArgs.append(key, value);
							}
						}
					});
					parentUrlArgs.forEach((value, key) => {
						hashValue.push(key + '=' + value);
					});
					if (0 < hashValue.length) {
						location.hash = '?' + hashValue.join('&')
					}
				}
			}
		});
	});
})(CRM.$)

