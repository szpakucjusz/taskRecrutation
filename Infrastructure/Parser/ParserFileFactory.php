<?php

declare(strict_types=1);

namespace Infrastructure\Parser;

use Infrastructure\Exception\InvalidFileFormatParserException;
use Infrastructure\Parser\Csv\CsvParser;
use Infrastructure\Parser\Json\JsonParser;
use Infrastructure\Parser\Xml\XmlParser;
use Infrastructure\ValueObject\File;

class ParserFileFactory
{
    private ParserInterface $parser;

    public function __construct(private File $file)
    {
        if (ParserInterface::FORMAT_CSV === $this->file->getFileExtension()) {
            $this->parser = new CsvParser();
        } elseif (ParserInterface::FORMAT_JSON === $this->file->getFileExtension()) {
            $this->parser = new JsonParser();
        } elseif (ParserInterface::FORMAT_XML === $this->file->getFileExtension()) {
            $this->parser = new XmlParser();
        } else {
            throw new InvalidFileFormatParserException('Invalid file format parser exception');
        }

    }

    public function parse(): string
    {
        return $this->parser->parse($this->file);
    }
}