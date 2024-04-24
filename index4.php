<?php
// Определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1,
        "transaction_date" => "2019-01-01",
        "transaction_amount" => 100.00,
        "transaction_description" => "Payment for groceries",
        "merchant_name" => "SuperMart"
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant"
    ],
    // Добавляем новые транзакции
    [
        "transaction_id" => 3,
        "transaction_date" => "2020-03-01",
        "transaction_amount" => 200.75,
        "transaction_description" => "Electronics purchase",
        "merchant_name" => "Tech World"
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2020-03-05",
        "transaction_amount" => 15.99,
        "transaction_description" => "Book purchase",
        "merchant_name" => "Bookstore"
    ]
];

// Функция для расчета общей суммы всех транзакций
function calculateTotalAmount($transactions) {
    return array_reduce($transactions, function ($carry, $item) {
        return $carry + $item['transaction_amount'];
    }, 0);
}

// Функция для расчета среднего арифметического всех транзакций
function calculateAverage($transactions) {
    return calculateTotalAmount($transactions) / count($transactions);
}

// Функция для создания массива описаний транзакций
function mapTransactionDescriptions($transactions) {
    return array_map(function ($transaction) {
        return $transaction['transaction_description'];
    }, $transactions);
}

// Вывод информации о транзакциях
echo "<table border='1'>";
echo "<tr style='background-color: #a6a6a6; color: #252525'>";
echo "<th colspan='4'>Оценки студентов</th>";
echo "</tr>";
echo "<tr style='background-color: #a6a6a6; color: #252525'>";
echo "<th>ID</th>";
echo "<th>Дата</th>";
echo "<th>Сумма транзакции</th>";
echo "<th>Описание транзакции</th>";
echo "<th>Название организации</th>";
echo "</tr>";

foreach ($transactions as $transaction) {
    echo "<tr>";
    echo "<td>" . $transaction['transaction_id'] . "</td>";
    echo "<td>" . $transaction['transaction_date'] . "</td>";
    echo "<td>" . $transaction['transaction_amount'] . "</td>";
    echo "<td>" . $transaction['transaction_description'] . "</td>";
    echo "<td>" . $transaction['merchant_name'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Вывод общей суммы всех транзакций
echo "Общая сумма транзакций: " . calculateTotalAmount($transactions) . "<br>";

// Вывод среднего значения всех транзакций
echo "Среднее значение транзакций: " . calculateAverage($transactions) . "<br>";

// Вывод массива описаний транзакций
$descriptions = mapTransactionDescriptions($transactions);
echo "Описания транзакций: <pre>";
print_r($descriptions);
echo "</pre>";
?>
