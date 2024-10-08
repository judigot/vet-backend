/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IPet } from "../../interfaces/interfaces";

type IBody = Omit<IPet, 'id'>;

export const createPet = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/pets`,
    body: JSON.stringify(formData),
  });
  return result;
};

