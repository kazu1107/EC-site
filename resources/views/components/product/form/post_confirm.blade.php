<div class="p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">出品内容</div>:
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>

                    <table class="table">
                        <tr>
                            <th>商品名</th>
                            <td>{{ $product_name }}</td>
                        </tr>
                        <tr>
                            <th>商品説明</th>
                            <td>{{ $product_description }}</td>
                        </tr>
                        <tr>
                            <th>価格</th>
                            <td>{{ $price }}</td>
                        </tr>
                        <tr>
                            <th>送料</th>
                            <td>{{ $postage }}</td>
                        </tr>
                    </table>

                    {!! Form::open(['url' => '/product/create',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}

                    @foreach($product->getAttributes() as $key => $value)
                        @if(isset($value))
                            @if(is_array($value))
                                @foreach($value as $subValue)
                                    <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                                @endforeach
                            @else
                                {!! Form::hidden($key, $value) !!}
                            @endif

                        @endif
                    @endforeach

                    {!! Form::submit('戻る', ['name' => 'action', 'class' => 'btn']) !!}
                    {!! Form::submit('送信', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
