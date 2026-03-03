<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Base Form Controls</div>
    </div>
    <div class="ibox-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Article Num:</label>
                    <input class="form-control" name="article_num" type="number" placeholder="Article Num" value="{{ old('article_num',(isset($article->article_num)) ? $article->article_num : '') }}">
                </div>  
            </div>
           
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Title" value="{{ old('title',(isset($article->title)) ? $article->title : '') }}">
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description',(isset($article->description)) ? $article->description : '') }}</textarea>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Author</label>
                    <input class="form-control" name="author" type="text" placeholder="Author" value="{{ old('author',(isset($article->author)) ? $article->author : '') }}">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Pages</label>
                    <input class="form-control" name="pages" type="text" placeholder="Pages" value="{{ old('pages',(isset($article->pages)) ? $article->pages : '') }}">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>DOI</label>
                    <input class="form-control" name="doi" type="text" placeholder="DOI" value="{{ old('doi',(isset($article->doi)) ? $article->doi : '') }}">
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Keywords</label>
                    <textarea name="keywords" class="form-control" rows="3">{{ old('keywords',(isset($article->keywords)) ? $article->keywords : '') }}</textarea>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Volume</label>
                    <input class="form-control" name="volume" type="number" placeholder="Article Num" value="{{ old('volume',(isset($article->volume)) ? $article->volume : '') }}">
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Issue</label>
                    <input class="form-control" name="issue" type="number" placeholder="Issue" value="{{ old('issue',(isset($article->issue)) ? $article->issue : '') }}">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Issue Date:</label>
                    <input class="form-control" name="issue_date" type="date" placeholder="Issue Date" value="{{ old('issue_date',(isset($article->issue_date)) ? $article->issue_date : '') }}">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Article Type</label>
                    <select class="form-control" name="type">
                        <option {{ (old('type',(isset($article->type)) ? $article->type : '' ) == 0 ) ? 'selected' : '' }} value="0">Regular</option>
                        <option {{ (old('type',(isset($article->type)) ? $article->type : '' ) == 1 ) ? 'selected' : '' }} value="1">Supplementary</option>
                        <option {{ (old('type',(isset($article->type)) ? $article->type : '' ) == 2 ) ? 'selected' : '' }} value="2">Special</option>
                    </select>
                </div>
            </div>
                    
            <div class="col-md-6" style="display:none;">
                <div class="form-group mb-4">
                    <label>Supplementary Issue</label>
                    <input class="form-control" name="sup_issue" readonly value="0" type="text" placeholder="Supplementary Issue" value="{{ old('sup_issue',(isset($article->sup_issue)) ? $article->sup_issue : '') }}">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>File</label>
                    <input class="form-control" name="file" type="file" >
                    @if(isset($article->attachment) && !empty($article->attachment))
                        <small class="text-muted"> <a target="_blank" href="{{ url($article->attachment) }}">Download File</a></small>
                    @endif
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label>Active</label>
                    <select class="form-control" name="is_active">
                        <option {{ (old('is_active',(isset($article->is_active)) ? $article->is_active : '' ) == 1 ) ? 'selected' : '' }} value="1">Yes</option>
                        <option {{ (old('is_active',(isset($article->is_active)) ? $article->is_active : '' ) == 0 ) ? 'selected' : '' }} value="0">No</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>