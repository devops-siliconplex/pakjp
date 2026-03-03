<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Base Form Controls</div>
    </div>
    <div class="ibox-body">
        <div class="row">
           
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Title" value="{{ old('title',(isset($article->title)) ? $article->title : '') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Acknowledgement Date :</label>
                    <input class="form-control" type="text" name="ack_date" placeholder="Acknowledgement Date" value="{{ old('ack_date',(isset($article->ack_date)) ? $article->ack_date : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Scanned :</label>
                    <input class="form-control" type="text" name="scanned" placeholder="Scanned" value="{{ old('scanned',(isset($article->scanned)) ? $article->scanned : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Sent for Modification :</label>
                    <input class="form-control" type="text" name="sForMod" placeholder="Sent for Modification" value="{{ old('sForMod',(isset($article->sForMod)) ? $article->sForMod : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Received after Modification :</label>
                    <input class="form-control" type="text" name="rAfterMod" placeholder="Received after Modification" value="{{ old('rAfterMod',(isset($article->rAfterMod)) ? $article->rAfterMod : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Sent for Evaluation :</label>
                    <input class="form-control" type="text" name="sForEval" placeholder="Sent for Evaluation" value="{{ old('sForEval',(isset($article->sForEval)) ? $article->sForEval : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Received after Evaluation :</label>
                    <input class="form-control" type="text" name="rAfterEval" placeholder="Received after Evaluation" value="{{ old('rAfterEval',(isset($article->rAfterEval)) ? $article->rAfterEval : '') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Sent for Revision :</label>
                    <input class="form-control" type="text" name="sForRev" placeholder="Sent for Revision" value="{{ old('sForRev',(isset($article->sForRev)) ? $article->sForRev : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Received after Revision :</label>
                    <input class="form-control" type="text" name="rAfterRev" placeholder="Received after Revision" value="{{ old('rAfterRev',(isset($article->rAfterRev)) ? $article->rAfterRev : '') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Accept/Reject for Publication :</label>
                    <input class="form-control" type="text" name="pubDate" placeholder="Accept/Reject for Publication" value="{{ old('pubDate',(isset($article->pubDate)) ? $article->pubDate : '') }}">
                </div>
            </div>

        </div>
    </div>
</div>