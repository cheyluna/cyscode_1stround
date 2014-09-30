<?php if ($remaining_bars): ?>
    <div class="alert alert-block alert-success">
    <h4 class="alert-heading">Result</h4>
    <div>Maximum possible length of chocolate bar:  <?php eh($remaining_bars) ?></div>
    </div>
<?php endif ?>

<?php if ($choco->hasError()): ?>
    <div class="alert alert-block">

    <h4 class="alert-heading">Validation error!</h4>
    <?php if (!empty($choco->validation_errors['raw_string']['length'])): ?>
        <div><em>String</em> must be betwen
        <?php eh($choco->validation['raw_string']['length'][1]) ?> and
        <?php eh($choco->validation['raw_string']['length'][2]) ?> characters.
        </div>
    <?php endif ?>

    <?php if (!empty($choco->validation_errors['raw_string']['format'])): ?>
        <div><em>String</em> must contain lowercase letters only.</div>
    <?php endif ?>
    
    </div>
<?php endif ?>

<form class="well" method="post" action="<?php eh(url('chocolate/index')) ?>">
    <label>Input string</label>
    <input type="text" class="span11" name="raw_string" title="<?php eh(Param::get('raw_string')) ?>">
    <br />
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<h2>Problem Statement</h2>
<p>You just bought a very delicious chocolate bar from a local store. This chocolate bar consists of N squares, numbered 0 through N-1. All the squares are arranged in a single row. There is a letter carved on each square. You are given a String letters. The i-th character of letters denotes the letter carved on the i-th square (both indices are 0-based).</p>
<p>You want to share this delicious chocolate bar with your best friend. At first, you want to give him the whole bar, but then you remembered that your friend only likes a chocolate bar without repeated letters. Therefore, you want to remove zero or more squares from the beginning of the bar, and then zero or more squares from the end of the bar, in such way that the remaining bar will contain no repeated letters.</p>
<p>Return the maximum possible length of the remaining chocolate bar that contains no repeated letters.</p>
<p>Constraints letters will contain between 1 and 50 characters, inclusive. Each character of letters will be a lowercase letter ('a' - 'z').</p>

<h3>Examples</h3>
<pre>
0)
"srm"
Returns: 3
You can give the whole chocolate bar as it contains no repeated letters.

1)
"dengklek"
Returns: 6
Remove two squares from the end of the bar.

2)
"haha"
Returns: 2
There are three possible ways:
Remove two squares from the beginning of the bar.
Remove two squares from the end of the bar.
Remove one square from the beginning of the bar and one square from the end of the bar.

3)
"www"
Returns: 1

4)
"thisisansrmbeforetopcoderopenfinals"
Returns: 9
</pre>
