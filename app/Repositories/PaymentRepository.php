<?php

namespace App\Repositories;

use App\Models\Payment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version February 20, 2019, 11:43 am UTC
 *
 * @method Payment findWithoutFail($id, $columns = ['*'])
 * @method Payment find($id, $columns = ['*'])
 * @method Payment first($columns = ['*'])
*/
class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'category_id',
        'course_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Payment::class;
    }
}
