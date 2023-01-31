@props(['label' => 'label', 'required' => false, 'help' => false, 'name' => 'name', 'id' => 'id', 'options' => [], 'size' => 'l', 'default' => []])
<div class="ecl-form-group ecl-u-mb-l">
    <x-ecl.label :label=$label :for=$id :name=$name :required=$required />
    <x-ecl.help :help=$help />
    <x-ecl.error-feedback :name=$name />
    <div class="ecl-select__container ecl-select__container--{{ $size }}">
        <select name="{{ $name }}[]" id="{{ $id }}" class="ecl-select" @if($required)required=""@endif multiple=""
                data-ecl-auto-init="Select" data-ecl-select-multiple=""
                data-ecl-select-default="Select an item" data-ecl-select-search="Enter keyword"
                data-ecl-select-no-results="No results found" data-ecl-select-all="Select all"
                data-ecl-select-clear-all="Clear all" data-ecl-select-close="Close">
            @foreach($options as $option)
                <option @if(in_array($option['value'], old($name, $default)))selected="" @endif value="{{ $option['value'] }}">{{ $option['label'] }}</option>
            @endforeach
        </select>
        <div class="ecl-select__icon">
            <svg class="ecl-icon ecl-icon--s ecl-icon--rotate-180 ecl-select__icon-shape" focusable="false" aria-hidden="true">
                <x-ecl.icon icon="corner-arrow" />
            </svg>
        </div>
    </div>
</div>