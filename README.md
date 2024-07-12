# XAMPP dashboard list projects

## Summary

PHP code to list project directories in XAMPP htdocs on the Dashboard

The default XAMPP `/dashboard/` displays the XAMPP version number, some introductory text and a paragraph about the XAMPP community.

I've often wished that it also listed the project directories that I have within the `\htdocs\` directory. So I have created this simple script.

## How to use it

1. Navigate to xampp/dashboard
2. Change index.html to index.php
3. Insert the following code before the Community H3 heading; this code:

```
<div class="row">
  <div class="large-12 columns">
    <h3>Community</h3>
  </div>
</div>
```

That's it. Enjoy!