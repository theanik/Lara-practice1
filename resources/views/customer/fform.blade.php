            
    <input class="form-control mt-3" type="text" name="name" value="{{old('name') ?? $customerDetails->name}}" placeholder="Name">
    <input class="form-control mt-3" type="text" name="email" value="{{ old('email') ?? $customerDetails->email}}" placeholder="E-mail">
    <div class="form-group mt-3">
        <select name="status" id="" class="form-control">
            <option value="" disable>Select status</option>
            @foreach($customerDetails->statusOpt() as $statusOptKey => $statusOptValue)
                <option value="{{$statusOptKey}}" {{ $customerDetails->status == $statusOptValue ? 'selected' : ' '}}>{{ $statusOptValue }}</option>
            @endforeach
            <!-- <option value="0" {{ $customerDetails->status == 'Unactive' ? 'selected' : ''}}>Unactive</option> -->
        </select>
    </div>
    <div class="form-group">
        <select name="company_id" class="form-control">
            @foreach($companys as $company)
                <option value="{{$company->id}}" {{ $company->id == $customerDetails->company_id ? 'selected' : ' '}} >{{$company->name}}</option>
            @endforeach
        </select>
    </div>