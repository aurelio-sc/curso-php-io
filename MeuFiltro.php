<?php

class MeuFiltro extends php_user_filter
{
    public $stream;

    #[\ReturnTypeWillChange]
    public function onCreate()
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    #[\ReturnTypeWillChange]
    public function filter($in, $out, &$consumed, $closing)
    {
        $saida = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);

            foreach ($linhas as $linha) {
                if (stripos($linha, 'parte') !== false) {
                    $saida .= "$linha\n";
                }
            }
        }

        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);

        return PSFS_PASS_ON;
    }
}