export async function getApiData(path) {
  const response = await fetch(`/api/${path}`);

  if (!response.ok) {
    throw new Error('Не удалось загрузить данные.');
  }

  return response.json();
}
