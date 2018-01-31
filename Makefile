jquery_version="2.2.4"
jquery_uri_part="https://code.jquery.com/jquery-"
bootstrap_uri="https://github.com/twbs/bootstrap/releases/download/v3.3.7/bootstrap-3.3.7-dist.zip"
fontawesome_uri="https://use.fontawesome.com/releases/v5.0.6/fontawesome-free-5.0.6.zip"
proj_root=`pwd`

all: jquery bootstrap font-awesome grunt

jquery: 
	wget -O js/$@.js $(jquery_uri_part)$(jquery_version).js

clean_jquery:
	rm -f js/jquery*.js

bootstrap: 
	mkdir -p bootstrap_temp
	cd bootstrap_temp; \
	wget $(bootstrap_uri); \
	unzip -oj *.zip
	mv bootstrap_temp/$@.css $(proj_root)/css/
	mv bootstrap_temp/$@-theme.css $(proj_root)/css/
	mv bootstrap_temp/$@.js $(proj_root)/js/
	mv bootstrap_temp/glyphicons* $(proj_root)/fonts/
	cd ..
	rm -r bootstrap_temp

clean_bootstrap:
	rm -f js/bootstrap*.js
	rm -f css/bootstrap*.css
	rm -f fonts/glyphicons*

font-awesome: 
	mkdir -p fontawesome_temp
	cd fontawesome_temp; \
	wget $(fontawesome_uri); \
	unzip -oj fontawesome-free-5.0.6.zip */on-server/*
	mv fontawesome_temp/fa-regular.css $(proj_root)/css/
	mv fontawesome_temp/fa-solid.css $(proj_root)/css/
	mv fontawesome_temp/fa-regular-* $(proj_root)/webfonts/
	mv fontawesome_temp/fa-solid-* $(proj_root)/webfonts/
	cd ..
	rm -r fontawesome_temp
	
clean_font-awesome:
	rm -f webfonts/*
	rm -f css/fa*.css

grunt:
	npm install
	grunt

clean_grunt:
	rm -rf node_modules
	rm -f style.min.css
	rm -f style.css
	rm -f style.css.map
	rm -f css/*.css
	rm -f css/*.map
	rm -f js/*.min.js
	
clean: clean_bootstrap clean_jquery clean_font-awesome clean_grunt
