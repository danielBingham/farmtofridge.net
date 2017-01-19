<?php

namespace App\Models\Farm;

use Illuminate\Database\Eloquent\Model;

/**
 * A model representing a single farm in our database of farms.
 *
 * @property    int $id The id database id of this farm.
 * @property    string  $name   The name of this farm.
 * @property    string  $email  The contact email of this farm.
 * @property    string  $phone_number   The contact phone number of this farm.
 * @property    string  $address    The address of this farm.
 * @property    string  $description    A description of this farm.
 * @property    string  $practices  A description of the growing practices this farm uses.
 */
class Farm extends Model {


}
