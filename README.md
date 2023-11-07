# Subthemes (generator and git repos)

## Summary

The *primary* aspect of this is to centralize the generation of the e2 subthemes to guarantee that (unless someone skips this) all subthemes will be working from the same set of definitions, which will be fed dynamically into the generated subthemes, which will be identical except for those SCSS settings.

This means that I'm preprocessing the SCSS (preprocessing the preprocessing, really) of a subtheme:
e2 is the parent-theme. It is a Zurb Foundation 6 based theme for Drupal. The subthemes are subthemes of `e2` and named `one2`, `two2`, `three2`, `four2`, `five2`, `six2`.

## Preprocessing the preprocessing ('Smarty' templating)

The preprocessing of the Foundation-based SCSS themes is done with [Smarty](https://www.smarty.net "Smarty PHP template engine") through PHP. Nothing fancy, just a simple way of affording extensibility and leaving the main parent-theme `e2` doing the majority of the work.

## Editing it

You can edit the subthemes by adding config settings into the file `my.cnf` and then also adding SCSS into `templates/style.tpl`. This will mean all the variables in `my.cnf` get compiled into the files that are output in `/generated`.

### Using it

You can use the templating on the command line by `cd` into the directory and then using the command `php process.php`.

Files will be generated into `generated/[one2/two2 etc.]`

License
This project is licensed under the MIT License - see the LICENSE file for details.

Contibutions and issue reporting welcome
