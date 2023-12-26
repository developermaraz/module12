<div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <form action="{{ route('search.Result.post') }}" method="POST">
                @csrf
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" name="from" style="height: 47px;">
                                        <option @if(old("from") == "Dhaka") selected @endif value="Dhaka">Dhaka</option>
                                        <option @if(old("from") == "Comilla") selected @endif value="Comilla">Comilla</option>
                                        <option @if(old("from") == "Cox's Bazaar") selected @endif value="Cox's Bazaar">Cox's Bazaar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" name="to" style="height: 47px;">
                                        <option @if(old("to") == "Dhaka") selected @endif value="Dhaka">Dhaka</option>
                                        <option @if(old("to") == "Comilla") selected @endif value="Comilla">Comilla</option>
                                        <option @if(old("to") == "Cox's Bazaar") selected @endif value="Cox's Bazaar">Cox's Bazaar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input value="{{ old('journeyDate') }}" type="date" class="form-control" placeholder="Date Of Journey" min="{{ now()->format('Y-m-d') }}" data-target="#date1" name="journeyDate" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select name="totalMember" class="custom-select px-4" style="height: 47px;">
                                        <option>Total Member</option>
                                        <option @if(old("totalMember") == "1") selected @endif value="1">1</option>
                                        <option @if(old("totalMember") == "2") selected @endif value="2">2</option>
                                        <option @if(old("totalMember") == "3") selected @endif value="3">3</option>
                                        <option @if(old("totalMember") == "4") selected @endif value="4">4</option>
                                        <option @if(old("totalMember") == "5") selected @endif value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit"
                            style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
