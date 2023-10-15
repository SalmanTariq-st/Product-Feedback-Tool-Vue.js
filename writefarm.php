use App\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $farm = Farm::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return response()->json($farm, 201);
    }
}
