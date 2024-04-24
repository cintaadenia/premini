<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Services\MidtransBase;
use Midtrans\Snap;

class MidtransSnap extends MidtransBase
{
    private mixed $_orderId;
    private Collection $_items;
    private array $_customerDetail;

    public function __construct(mixed $orderId, Collection $item, array $customerDetail)
    {
        parent::__construct();
        $this->_orderId = $orderId;
        $this->_items = $item;
        $this->_customerDetail = $customerDetail;
    }

    public function create()
    {
        $itemDetail = $this->_items->map(function ($item) {
            $item['price'] = (int) ceil($item['price'] + ($item['price'] * 0.11));
            return $item;
        });

        $transactionDetail = [
            'order_id' => $this->_orderId,
            'gross_amount' => (int) ceil($itemDetail->map(function ($item) {
                return $item['price']; // Map each item's price to 11% of its original value
            })->sum()),
        ];

        return [
            'token' => Snap::getSnapToken([
                'transaction_details' => $transactionDetail,
                'item_details' => $itemDetail->toArray(),
                'customer_details' => $this->_customerDetail,
            ]),
            'total' => (int) ceil($itemDetail->map(function ($item) {
                return $item['price']; // Map each item's price to 11% of its original value
            })->sum())
        ];
    }
}
