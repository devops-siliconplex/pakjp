<aside id="sidebar-primary" class="widget-area sidebar"
    role="complementary">
    <section id="text-4" class="widget widget_text"> <div class="textwidget"><div
                class="textwidget" style="text-align: center;">
                <form method="POST" action="{{ route('oursearch') }}">
                    @csrf
                    <h2 style="margin:0.3em">Search</h2>
                    <input style="margin-bottom: 5px;" type="text" name="msNumber" required id="" placeholder="Enter text to search">
                    <input type="hidden" name="type" value="article_tracking">
                    <input style="margin-bottom: 15px;" type="submit" value="Search Article">
                </form>            
            </div>
        </div>
    </section>
    <section id="text-3" class="widget widget_text"> <div
            class="textwidget"><h2 style="text-align: center; text-decoration:
                underline; font-size: 1.3em;">Editor-in-Chief</h2>
            <p><img class="aligncenter" style="border: 1px solid #40331b; height:
                    125px;" src="{{ url('assets') }}/Muhammad_Harris_Shoaib.jpg" alt="Editor-in-Chief"></p>
            <div style="text-align: center; font-size: 1em; font-weight: 800;">Prof. 
                Dr. M Harris Shoaib </div>
            <div style="text-align: center; font-size: 1em; font-weight: bold;">2020 – todate</div>
        </div>
    </section>
</aside><!-- #secondary -->