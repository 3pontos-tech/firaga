```php
function calculateCompoundInterest(
    float $principal, 
    float $rate, 
    int $years
): array {
    $total = $principal * pow(1 + $rate / 100, $years);
    $interest = $total - $principal;

    return [
        'interest' => $interest,
        'total' => $total
    ];  
}
```
