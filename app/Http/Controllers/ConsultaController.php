<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ConsultaController extends Controller
{
    public function showForm()
    {
        return view('consulta.form');
    }

    public function consultarPorUUID(Request $request)
    {
        $url = 'https://timbrado.pade.mx/servicio/rest/consulta/cfdPorUUID';
        $headers = [
            'Authorization' => 'Basic ' . base64_encode($request->usuario . ':' . $request->contrasena),
        ];

        $queryParams = [
            'contrato' => $request->contrato,
            'uuid' => $request->uuid,
        ];

        $urlWithQueryParams = $url . '?' . http_build_query($queryParams);

        $client = new Client([
            'headers' => $headers,
        ]);

        try {
            $response = $client->request('POST', $urlWithQueryParams);
            $responseData = json_decode($response->getBody(), true);

            // La respuesta fue exitosa, manejar la respuesta según el caso
            return view('consulta.resultado', ['data' => $responseData]);
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la respuesta no sea exitosa
            $errorResponse = $e->getResponse()->getBody()->getContents();

            return view('consulta.resultado', ['error' => $errorResponse]);
        }
    }
}
