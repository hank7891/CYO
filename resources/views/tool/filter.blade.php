@extends('layout')

@section('content')
    <h1>Welcome</h1>
    <HR>

    <h4>
        功能(function):
        <input type="button" class="btn btn-info delete" value="刪除(Delete)" />
        <input type="button" class="btn btn-info search" value="查詢(Search)" />
        <input type="button" class="btn btn-info clear" value="清除(Clear)" />

        分隔符號(sign):
          <select class="" id="sign" style="width: 100px;">
            <option value=" ">空白(" ")</option>
            <option value=",">逗號(",")</option>
            <option vlaue=";">分號(";")</option>
          </select>
    </h4>

    <div class="form-group">
        <label for="comment">Source:</label>
        <textarea class="form-control source" rows="5" id="comment"></textarea>
    </div>

    <div class="text-center">
        <span class="glyphicon glyphicon-menu-down"></span>
    </div>

    <div class="form-group">
        <label for="comment">Result:</label>
        <textarea class="form-control result" rows="5" id="comment"></textarea>
    </div>

    <script>
        $(function () {
            $('.clear').on('click', function () {
                $('.source').val('');
                $('.result').val('');
            });

            $('.delete').on('click', function () {
                var str     = $('.source').val(),
                    sign    = $('#sign').val(),
                    str_ary = str.split(sign);

                var result = str_ary.filter(function(element, index, str_ary){
                    return str_ary.indexOf(element) === index;
                });

                $('.result').val(result.join(sign));
            });

            $('.search').on('click', function () {
                var str     = $('.source').val(),
                    sign    = $('#sign').val(),
                    str_ary = str.split(sign);

                var result = str_ary.filter(function(element, index, str_ary){
                    return str_ary.indexOf(element) !== index;
                });

                result = result.filter(function(element, index, result){
                    return result.indexOf(element) === index;
                });

                $('.result').val(result.join(sign));
            });
        })
    </script>
@stop
