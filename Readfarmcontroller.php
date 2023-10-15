use App\Farm;

class FarmController extends Controller
{
    public function index()
    {
        $farms = Farm::all();
        return response()->json($farms, 200);
    }
}
