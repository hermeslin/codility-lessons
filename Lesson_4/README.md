## Permutation Check
這題原本用
```
function solution($A)
{
    $total = count($A);
    $maxValue = max($A);
    return ($total !== $maxValue) ? 0 : 1;
}
```

結果發現陣列的值可能會重複，而如果使用 `array_unique` 先過濾重複的值，在大陣列的時候，效能會不好，所以最後乖乖的 `for loop` 去找了