
Collabook Wordpress theme
=========================

Collabook is a clean Wordpress theme for collaborative editing/review of a
document. The document is created by editing standard Wordpress pages in a
hierarchy. Users comment on the individual pages to give feedback. The idea is
to enable a group of editors and a large community to participate in a
transparent creation of a document.

|H|

Collabook is implemented as a Thematic child theme. Although some templates are
overriden, the only addition to the markup is WAI ARIA landmark roles and an
adjustment of heading levels in the comment section.

The theme adjusts the doctype to HTML5 to make sure validation fanatics donät
freak out over the WAI ARIA landmark roles. See functions.php for more information.

.. |H| image:: https://github.com/peterk/Collabook/raw/master/screenshot.png

License
-------

Collabook is licensed under the same license as the Thematic framework and
Wordpress itself: GPLv2.


Installation
------------

1. Download and install Wordpress version 3.1 (other versions may work).

2. Download and install the Thematic theme framework from http://themeshaper.com/thematic/ (tested with version 0.9.7.7)

3. Download the files in this repository and place them in a folder called "collabook" in the wp-content/themes directory.

4. Activate the theme in the Wordpress admin area.


Contribute
----------

Feedback is welcome.
