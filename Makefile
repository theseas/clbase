jquery_version="2.2.4"
jquery_uri_part="https://code.jquery.com/jquery-"
bootstrap_uri="https://github.com/twbs/bootstrap/releases/download/v3.3.7/bootstrap-3.3.7-dist.zip"
proj_root=`pwd`

all: jquery bootstrap font-awesome

jquery:
	wget -O js/$@.js $(jquery_uri_part)$(jquery_version).js
	wget -O js/$@.min.js $(jquery_uri_part)$(jquery_version).min.js

clean_jquery:
	rm -f js/jquery*.js

bootstrap:
	mkdir -p bootstrap_temp
	cd bootstrap_temp; \
	wget $(bootstrap_uri); \
	unzip -oj *.zip
	mv bootstrap_temp/$@.css $(proj_root)/css/
	mv bootstrap_temp/$@.min.css $(proj_root)/css/
	mv bootstrap_temp/$@-theme.css $(proj_root)/css/
	mv bootstrap_temp/$@-theme.min.css $(proj_root)/css/
	mv bootstrap_temp/$@.js $(proj_root)/js/
	mv bootstrap_temp/$@.min.js $(proj_root)/js/
	mv bootstrap_temp/glyphicons* $(proj_root)/fonts/
	rm -r bootstrap_temp

clean_bootstrap:
	rm -f js/bootstrap*.js
	rm -f css/bootstrap*.css
	rm -f fonts/glyphicons*

font-awesome:

clean: clean_bootstrap clean_jquery
