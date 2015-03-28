default:
	make styles; make serve

styles:
	mkdir -p css
	sass -I ./sass/include ./sass/styles.scss ./css/styles.css

serve:
	php -S localhost:8080