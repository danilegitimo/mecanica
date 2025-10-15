<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateOrUpdateVehicle extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array {

    $vehicle = $this->route('vehicle');

    return [
      'placa' => [
        'required',
        'string',
        'size:8',
        $vehicle ? Rule::unique('vehicles')->ignore($vehicle->id)
                 : Rule::unique('vehicles')
      ],
      'renavam' => [
        'required',
        'string',
        'size:11',
        $vehicle ? Rule::unique('vehicles')->ignore($vehicle->id)
                 : Rule::unique('vehicles')
      ],
      'client_id'        => 'nullable|exists:clients,id',
      'proprietario'     => 'required|string|min:5|max:50',
      'cor'              => 'required|min:5',
      'ano'              => 'required|numeric|between:1990,2030',
      'vehicle_model_id' => 'required|numeric|exists:vehicle_models,id',
    ];
  }
}
