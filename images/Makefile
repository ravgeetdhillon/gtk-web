all: architecture.png header-logo.png header-logo-gtk-doc.png header-logo-inset.png gtkbg.png

architecture.png: architecture.svg
	rsvg-convert $< -w 860 -o $@

header-logo.png: header-logo.svg
	rsvg-convert $< -w 900 -o $@

header-logo-gtk-doc.png: header-logo-gtk-doc.svg
	rsvg-convert $< -w 900 -o $@

header-logo-inset.png: header-logo-inset.svg
	rsvg-convert $< -w 900 -o $@

gtkbg.png: gtkbg.svg
	rsvg-convert $< -h 500 -o $@
