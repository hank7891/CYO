@extends('layout')

@section('content')
    <h1>Welcome</h1>
    <HR>

    <?php
        $lengthOne = [
            '公 分' => 'cm',
            '公 尺' => 'm',
            '公 里' => 'km',
            '市 尺' => 'Am',
            '臺 尺' => 'TAm',
        ];
        $lengthTwo = [
            '吋' => 'inch',
            '呎' => 'feet',
            '碼' => 'yb',
            '哩' => 'mil',
            '國際浬' => 'Amil',
        ];

        $weightOne = [
            '公 克' => 'g',
            '公 斤' => 'kg',
            '公 噸' => 't',
            '市 斤' => 'Akg',
            '臺 兩' => 'Tg',
        ];
        $weightTwo = [
            '臺 斤' => 'Tkg',
            '盎 司' => 'oz',
            '磅'    => 'lb',
            '長 噸' => 'Ltons',
            '短 噸' => 'Stons',
        ];
    ?>
    <h4>
        長度單位換算:
    </h4>
    <table class="table">
        <thead>
            <tr>
                @foreach ($lengthOne as $key => $value)
                    <th scope="col">{{$key}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($lengthOne as $key => $value)
                    <td ><input type="text" class="form-control lengthConversion {{$value}}"
                        id="{{$value}}" name="{{$value}}" data-type="{{$value}}" /></td>
                @endforeach
            </tr>
        </tbody>
        <thead>
            <tr>
                @foreach ($lengthTwo as $key => $value)
                    <th scope="col">{{$key}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($lengthTwo as $key => $value)
                    <td ><input type="text" class="form-control lengthConversion {{$value}}"
                        id="{{$value}}" name="{{$value}}" data-type="{{$value}}" /></td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <hr>

    <h4>
        重量單位換算:
    </h4>
    <table class="table">
        <thead>
            <tr>
                @foreach ($weightOne as $key => $value)
                    <th scope="col">{{$key}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($weightOne as $key => $value)
                    <td ><input type="text" class="form-control weightConversion {{$value}}"
                        id="{{$value}}" name="{{$value}}" data-type="{{$value}}" /></td>
                @endforeach
            </tr>
        </tbody>
        <thead>
            <tr>
                @foreach ($weightTwo as $key => $value)
                    <th scope="col">{{$key}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($weightTwo as $key => $value)
                    <td ><input type="text" class="form-control weightConversion {{$value}}"
                        id="{{$value}}" name="{{$value}}" data-type="{{$value}}" /></td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <script>
        $(function () {
            $('.lengthConversion').on('change', function () {
                lengtCount($(this));
            })

            $('.weightConversion').on('change', function () {
                weightCount($(this));
            })

        })
        function definitionLengthUnit() {
            /**
             * 對比單位 公分(cm)
             */
            var lengthUnit = [];
            lengthUnit['cm']   = 1;
            lengthUnit['m']    = 100;
            lengthUnit['km']   = 100000;
            lengthUnit['Am']   = 33.3333;
            lengthUnit['TAm']  = 30.303;
            lengthUnit['inch'] = 2.54;
            lengthUnit['feet'] = 30.4801;
            lengthUnit['yb']   = 91.4402;
            lengthUnit['mil']  = 160935;
            lengthUnit['Amil'] = 185200;

            return lengthUnit;
        }
        function lengtCount(unit) {
            var lengthUnit = definitionLengthUnit(),
                cm = parseInt(unit.val()) * parseInt(lengthUnit[unit.data('type')]);

            $('.lengthConversion').each(function(index, el) {
                var re = cm / lengthUnit[$(this).data('type')];

                if (isNaN(re)) {
                    re = 0;
                }
                $(this).val(re);
            });
        }

        function definitionWeightUnit() {
            /**
             * 對比單位 克(g)
             */

            var weightUnit = [];
            weightUnit['g']     = 1;
            weightUnit['kg']    = 1000;
            weightUnit['t']     = 1000000;
            weightUnit['Akg']   = 500;
            weightUnit['Tg']    = 37.5;
            weightUnit['Tkg']   = 600;
            weightUnit['oz']    = 28.3495;
            weightUnit['lb']    = 453.592;
            weightUnit['Ltons'] = 1016050;
            weightUnit['Stons'] = 453.592;

            return weightUnit;
        }
        function weightCount(unit) {
            var weightUnit = definitionWeightUnit(),
                g = parseInt(unit.val()) * parseInt(weightUnit[unit.data('type')]);

            $('.weightConversion').each(function(index, el) {
                var re = g / weightUnit[$(this).data('type')];

                if (isNaN(re)) {
                    re = 0;
                }
                $(this).val(re);
            });
        }
    </script>
@stop
