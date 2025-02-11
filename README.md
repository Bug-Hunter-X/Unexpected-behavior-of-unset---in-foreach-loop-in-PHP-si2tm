# PHP Foreach Loop with Unset() Bug

This repository demonstrates an uncommon bug in PHP related to the usage of `unset()` within a `foreach` loop when iterating over an array.  The issue arises from modifying the array structure during iteration, which leads to elements being skipped or unexpected behavior.  The bug is demonstrated in `bug.php` and a solution is provided in `bugSolution.php`.

## Bug Description

When using `unset()` to remove elements from an array while iterating over it using a `foreach` loop, the internal array pointer can become disoriented. This can result in elements being unexpectedly skipped and not processed correctly.

## Solution

The solution involves iterating over the array using a `for` loop and manually managing the index. This allows for safe removal of elements without disrupting the iteration process.