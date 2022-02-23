@if($rows)
    @foreach($rows as $row)

        @if($row['acf_fc_layout'] == 'full_width')
            <div class="row align-items-center">
                <div class="col-12">
                    <x-basic-components :flex="$row['flexible_content']"/>
                </div>
            </div>
        @endif

        @if($row['acf_fc_layout'] == 'centered')
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 text-center">
                    <x-basic-components :flex="$row['flexible_content']"/>
                </div>
            </div>
        @endif


    @endforeach
@endif
