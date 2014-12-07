# 50 - Pointless Keys

*Written by Michael Zhang*

## Problem

Well this sure is a useless looking website. Still, I wonder if something is hidden in it.

[Pointless website](http://www.easyctf.com/sites/pointless-keys/index.php)

## Hint

You may want to look at some of the *JavaScript* source code.

## Solution

```javascript
// konami
Array.prototype.compare = function(o) {
  if (this.length != o.length) return false;
  for (var i = 0; i < this.length; i++) {
    if (this[i] != o[i]) return false
      }
  return true
};
if (window.addEventListener) {
  var kkeys = [],
      tkeys = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 66, 65, 13];
  window.addEventListener("keydown", function(e) {
    kkeys.push(e.keyCode);
    var k = kkeys.join(",");
    var t = tkeys.join(",");
    if (k.indexOf(t) >= 0) {
      $.ajax({
        url: "/sites/pointless-keys/flag.php",
        type: "POST",
        data: {
          keys: kkeys,
          target: tkeys
        },
        dataType: "html",
        success: function(content) {
          console.log(content);
        },
      });
      kkeys = [];
    }
  }, true)
}
```

The comment `konami` implies that you have to perform a konami code sequence on the page. However, closely examine the source code, and you'll notice that the sequence in `tkeys` doesn't exactly match the konami code.

```
[38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 66, 65, 13]
```

is actually: UP UP DOWN DOWN LEFT RIGHT LEFT RIGHT B A **B A** ENTER

If you perform this sequence on the page, then check the console (since it prints the flag to the console), then you would find your flag.

## Flag

`konami_c0dez`